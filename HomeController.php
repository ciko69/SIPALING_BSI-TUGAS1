<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo '
        <html>
        <head>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background: linear-gradient(135deg, #667eea, #764ba2);
                    margin: 0;
                    font-family: "Segoe UI", sans-serif;
                }
    
                .btn-detail {
                    background: #fff;
                    color: #764ba2;
                    padding: 15px 30px;
                    border: none;
                    border-radius: 50px;
                    font-size: 18px;
                    font-weight: bold;
                    cursor: pointer;
                    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
                    transition: all 0.3s ease;
                }
    
                .btn-detail:hover {
                    background: #764ba2;
                    color: #fff;
                    transform: translateY(-5px) scale(1.05);
                    box-shadow: 0 15px 25px rgba(0,0,0,0.3);
                }
            </style>
        </head>
        <body>
            <button class="btn-detail" onclick="window.location.href=\'/profil\'">
                DETAIL PRIBADI KLIK DISINI
            </button>
        </body>
        </html>
        ';
    }     
    
    public function profil()
    {
        echo '
        <html>
        <head>
            <style>
                body {
                    font-family: "Segoe UI", sans-serif;
                    background: linear-gradient(135deg,rgb(218, 53, 58), #fad0c4);
                    padding: 40px;
                    color: #333;
                }

                .profile-card {
                    max-width: 400px;
                    margin: 50px auto;
                    background: white;
                    padding: 30px;
                    border-radius: 20px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                    text-align: center;
                }

                .profile-card img {
                    width: 120px;
                    height: 120px;
                    object-fit: cover;
                    border-radius: 50%;
                    border: 4px solid #ff9a9e;
                    margin-bottom: 20px;
                }

                .profile-card h2 {
                    margin: 0;
                    font-size: 24px;
                    color: #764ba2;
                }

                .profile-card p {
                    font-size: 16px;
                    color: #666;
                }
            </style>
        </head>
        <body>
            <div class="profile-card">
                <img src="https://lh3.googleusercontent.com/pw/AP1GczOv8D72eHUzyVdfD2bDs5WwbApbsXO-VDoshsVj5BTP2KWLwhFRRARZKwqELjvuJMEG7imKRW6Gu-qVBZNXGLZ6ZegljPQpFEbCaisKo9AOykpxpTs=w681-h740-no" alt="Foto Profil">
                <h2>NAUFAL BURHANUDDIN YUSUF</h2>
                <p>NIM : 17231129</p>
                <p>KELAS : 17.4B.05</p>
            </div>
        </body>
        </html>
        ';
    }
 
}
