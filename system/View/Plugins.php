<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\View;

use CodeIgniter\HTTP\URI;

/**
 * View plugins
 */
class Plugins
{
    /**
     * Wrap helper function to use as view plugin.
     *
     * @return string|URI
     */
    public static function currentURL()
    {
        return current_url();
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @return string|URI
     */
    public static function previousURL()
    {
        return previous_url();
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param array{email?: string, title?: string, attributes?: array<string, string>|object|string} $params
     */
    public static function mailto(array $params = []): string
    {
        $email = $params['email'] ?? '';
        $title = $params['title'] ?? '';
        $attrs = $params['attributes'] ?? '';

        return mailto($email, $title, $attrs);
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param array{email?: string, title?: string, attributes?: array<string, string>|object|string} $params
     */
    public static function safeMailto(array $params = []): string
    {
        $email = $params['email'] ?? '';
        $title = $params['title'] ?? '';
        $attrs = $params['attributes'] ?? '';

        return safe_mailto($email, $title, $attrs);
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param array<int|string, string>|list<string> $params
     */
    public static function lang(array $params = []): string
    {
        $line = array_shift($params);

        return lang($line, $params);
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param array{field?: string} $params
     */
    public static function validationErrors(array $params = []): string
    {
        $validator = service('validation');
        if ($params === []) {
            return $validator->listErrors();
        }

        return $validator->showError($params['field']);
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param list<string> $params
     *
     * @return false|string
     */
    public static function route(array $params = [])
    {
        return route_to(...$params);
    }

    /**
     * Wrap helper function to use as view plugin.
     *
     * @param list<string> $params
     */
    public static function siteURL(array $params = []): string
    {
        return site_url(...$params);
    }

    /**
     * Wrap csp_script_nonce() function to use as view plugin.
     */
    public static function cspScriptNonce(): string
    {
        return csp_script_nonce();
    }

    /**
     * Wrap csp_style_nonce() function to use as view plugin.
     */
    public static function cspStyleNonce(): string
    {
        return csp_style_nonce();
    }
}
