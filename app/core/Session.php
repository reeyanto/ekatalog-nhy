<?php

class Session {

    /**
     * set session
     * 
     * cara menggunakan:
     * Session::set('key1', 'value 1');
     * Session::set('key2', 'value 2');
     * 
     * atau:
     * Session::set([
     * 'key1' => 'value 1',
     * 'key2' => 'value 2'
     * ]);
     */
    public static function set($key, $value = null) {
        if(is_array($key) && $value == null) {
            foreach($key as $k => $v) {
                $_SESSION[$k] = $v;
            }
        }
        else {
            $_SESSION[$key] = $value;
        }
    }


    /**
     * get value of session
     * 
     * cara menggunakan:
     * Session::get('key1');
     * Session::get('key2');
     */
    public static function get($key) {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * destroy session by key
     * 
     * cara menggunakan:
     * Session::destroy('key');
     * 
     * atau:
     * Session::destroy(['key1', 'key2', 'key3']);
     */
    public static function destroy($key = null) {
        if(is_array($key)) {
            foreach($key as $k) {
                unset($_SESSION[$k]);
            }
        }
        elseif($key != null) {
            unset($_SESSION[$key]);
        }
        else {
            session_destroy();
        }
    }


}