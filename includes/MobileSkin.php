<?php
/**
 * A MediaWiki extension to use another skin on mobile without MobileFrontend
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 51 Franklin
 * Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * @copyright 2023 TylerMS887
 * @license GPL-2.0-or-later https://www.gnu.org/licenses/gpl-2.0.html
 */


if ( !isset( $wgNameOfMobileSkin ) ) {
    $wgNameOfMobileSkin = 'minerva';
}
if (preg_match("/(mobile|webos|opera mini|android|blackberry|tablet)/i", $_SERVER['HTTP_USER_AGENT'])) {
    $wgDefaultSkin = $wgNameOfMobileSkin;
}
$wgHooks['GetPreferences'][] = function( $user, &$preferences ) {
    if ( preg_match( "/(mobile|webos|opera mini|android|blackberry|tablet)/i", $_SERVER['HTTP_USER_AGENT'] ) ) {
        $preferences['skin'] = [
            'type' => 'info',
            'label-message' => 'mobileskin-no-change',
        ];
    }
    return true;
};
