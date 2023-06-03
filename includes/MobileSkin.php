<?php
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
