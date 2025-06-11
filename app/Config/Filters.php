<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\Auth_filter;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'auth_filter' => Auth_filter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        //digunakan untuk controller2 yang tidak perlu login terlebih dahulu
        'before' => [
            'auth_filter' => ['except' => [
                'auth', 'auth/*',
                'web', 'web/*',
                'daftar', 'daftar/*',
                'formpendaftaran', 'formpendaftaran/*',
                'dokpendaftaran', 'dokpendaftaran/*',
                '/'
                ]]
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        //digunakan untuk controller2 yang wajib login terlebih dahulu
        'after' => [
            'auth_filter' => ['except' => [
                'home', 'home/*',
                'profil', 'profil/*',

                'menu', 'menu/*',
                'datasiswa', 'datasiswa/*',
                'dokumensiswa', 'dokumensiswa/*',
                'pendaftar', 'pendaftar/*',
                'tabeluser', 'tabeluser/*',
                'pembayaran', 'pembayaran/*',
                'sertifikat', 'sertifikat/*',

                'user', 'user/*',
                ]],
            'toolbar'
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
