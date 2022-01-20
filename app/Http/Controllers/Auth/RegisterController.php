<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return "<form>
                    <label for='login'>Enter your login:</label>
                    <input type='text' id='login' name='user_login'>
                    <label for='password'>Enter your password:</label>
                    <input type='password' id='password' name='user_password'>
                    <label for='remember'>Remember</label>
                    <input type='checkbox' id='remember' name='user_remember'>
                    <input type='submit' value='Register'>
                </form>";
    }
}
