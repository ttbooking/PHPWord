<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2018 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Escaper;

/**
 * HTML escaper for the HTML writer (replaces laminas/laminas-escaper)
 *
 * Attributes are always written in double quotes, so htmlspecialchars with ENT_QUOTES is enough for them too.
 */
class Html
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function escapeHtml($string)
    {
        return htmlspecialchars((string) $string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function escapeHtmlAttr($string)
    {
        return $this->escapeHtml($string);
    }
}
