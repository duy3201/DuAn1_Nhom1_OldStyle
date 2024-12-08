<?php

namespace App\Helpers;

use App\Models\User;
use App\Views\Client\Components\Notification;

class AuthHelper {
    public static function register($data) {
        $user = new User();
        // Bắt lỗi tồn tại username
        $is_exist = $user->getOneUserByUsername($data['username']);

        if ($is_exist) {
            NotificationHelper::error('exist_register', 'Tên đăng nhập đã tồn tại');
            return false;
        }

        $result = $user->createUser($data);

        if ($result) {
            NotificationHelper::success('register', 'Đăng ký thành công');
            return true;
        }

        NotificationHelper::error('register', 'Đăng ký thất bại');
        return false;
    }

    public static function login($data) {
        $user = new User();
        // Bắt lỗi tồn tại username
        $is_exist = $user->getOneUserByUsername($data['username']);

        if (!$is_exist) {
            NotificationHelper::error('exist_username', 'Tên đăng nhập không tồn tại');
            return false;
        }

        // Kiểm tra mật khẩu người dùng nhập có đúng không
        if (!password_verify($data['password'], $is_exist['password'])) {
            NotificationHelper::error('password', 'Mật khẩu không chính xác');
            return false;
        }

        // Kiểm tra trạng thái tài khoản
        if ($is_exist['status'] == 0) {
            NotificationHelper::error('status', 'Tài khoản đã bị khóa');
            return false;
        }

        if ($data['remember']) {
            self::updateCookie($is_exist['id']);
        } else {
            self::updateSession($is_exist['id']);
        }
        NotificationHelper::success('login', 'Đăng nhập thành công');
        return true;
    }

    public static function updateCookie(int $id) {
        $user = new User();
        $result = $user->getOneUser($id);

        if ($result) {
            // Chuyển array thành string json để lưu vào cookie user
            $user_data = json_encode($result);

            // Lưu cookie
            setcookie('user', $user_data, time() + 3600 * 24 * 30 * 12, '/');

            // Lưu session
            $_SESSION['user'] = $result;
        }
    }

    public static function updateSession(int $id) {
        $user = new User();
        $result = $user->getOneUser($id);

        if ($result) {
            // Lưu session
            $_SESSION['user'] = $result;
        }
    }

    public static function checkLogin(): bool {
        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            $user_data = json_decode($user);
            
            $_SESSION['user'] = (array) $user_data;
            
            if (isset($user_data->id)) {
                setcookie('id_user', $user_data->id, time() + 3600 * 24 * 30 * 12, '/');
            }
            if (isset($user_data->name)) {
                setcookie('name_user', $user_data->name, time() + 3600 * 24 * 30 * 12, '/');
            }
            if (isset($user_data->email)) {
                setcookie('email_user', $user_data->email, time() + 3600 * 24 * 30 * 12, '/');
            }
            
            return true;
        }
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }
    
    public static function logout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    
        if (isset($_COOKIE['user'])) {
            setcookie('user', '', time() - 3600 * 24 * 30 * 12, '/');
        }
        
        if (isset($_COOKIE['id_user'])) {
            setcookie('id_user', '', time() - 3600 * 24 * 30 * 12, '/');
        }
        if (isset($_COOKIE['name_user'])) {
            setcookie('id_user', '', time() - 3600 * 24 * 30 * 12, '/');
        }
        if (isset($_COOKIE['email_user'])) {
            setcookie('email_user', '', time() - 3600 * 24 * 30 * 12, '/');
        }
    }
    public static function edit($id) {
        if (!self::checkLogin()) {
            NotificationHelper::error('login', 'Vui lòng đăng nhập để xem thông tin');
            return false;
        }

        $data = $_SESSION['user'];
        $user_id = $data['id'];

        if ($user_id != $id) {
            NotificationHelper::error('user_id', 'Không có quyền xem thông tin tài khoản này');
            return false;
        }

        return true;
    }

    public static function update($id, $data) {
        $user = new User();
        $result = $user->update($id, $data);

        if (!$result) {
            NotificationHelper::error('update_user', 'Cập nhật thông tin tài khoản thất bại');
            return false;
        }

        if ($_SESSION['user']) {
            self::updateSession($id);
        }

        if ($_COOKIE['user']) {
            self::updateCookie($id);
        }

        NotificationHelper::success('update_user', 'Cập nhật thông tin tài khoản thành công');
        return true;
    }

    public static function changePassword($id, $data) {
        $user = new User();
        $result = $user->getOneUser($id);

        if (!$result) {
            NotificationHelper::error('account', 'Tài khoản không tồn tại');
            return false;
        }

        //kiểm tra mật khẩu cũ có trùng với database ko
        if (!password_verify($data['old_password'], $result['password'])) {
            NotificationHelper::error('password_verify', 'Mật khẩu cũ không chính xác');
            return false;
        }

        //Mã hóa mật khẩu trước khi lưu
        $hash_password = password_hash($data['new_password'], PASSWORD_DEFAULT);

        $data_update = [
            'password' => $hash_password,
        ];

        $result_update = $user->updateUser($id, $data_update);

        if ($result_update) {
            if (isset($_COOKIE['user'])) {
                self::updateCookie($id);
            }

            self::updateSession($id);

            NotificationHelper::success('change-password', 'Đổi mật khẩu thành công');
            return true;
        } else {
            NotificationHelper::success('change-password', 'Đổi mật khẩu thất bại');
            return false;
        }
    }

    public static function forgotPassword($data) {
        $user = new User();

        $result = $user->getOneUserByUsername($data['username']);

        return $result;
    }

    public static function resetPassword($data) {
        $user = new User();
        $result = $user->updateUserByUsernameAndEmail($data);
        return $result;
    }

    public static function middleware() {
        // var_dump($_SERVER['REQUEST_URI']);
        $admin = explode('/', $_SERVER['REQUEST_URI']);
        // var_dump($admin);
        $admin = $admin[1];

        if ($admin == 'admin') {
            // if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1){
            //     NotificationHelper::error('admin', 'Tài khoản này không có quyền truy cập');
            //     header('location: /login');
            //     exit;
            // }

            if (!isset($_SESSION['user'])) {
                NotificationHelper::error('admin', 'Vui lòng đăng nhập');
                header('location: /login');
                exit;
            }

            if ($_SESSION['user']['role'] != 1) {
                NotificationHelper::error('admin', 'Tài khoản này không có quyền truy cập');
                header('location: /login');
                exit;
            }
        }
    }
}
?>
