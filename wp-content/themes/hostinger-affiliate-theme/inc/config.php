<?php

class HostingerAffiliatesWpConfig {
	private $configPath;
	private $config;
    const DEFAULT_THEME_UPDATE_URI = 'https://hostinger-wp-updates.com?action=get_metadata&slug=hostinger-affiliate-theme';

	public function __construct( $configPath ) {
		$this->configPath = $configPath;
		$this->decodeConfig();
	}

	private function decodeConfig() {
		if ( file_exists( $this->configPath ) ) {
			$configContent = file_get_contents( $this->configPath );
			$this->config  = json_decode( $configContent, true );
		}
	}

	public function getThemeUpdaterURI( string $default = self::DEFAULT_THEME_UPDATE_URI ) {
		return $this->getConfigValue( 'affiliate_theme_update_uri', $default );
	}

	private function getConfigValue( string $key, $default ) {
		if ( $this->config && isset( $this->config[ $key ] ) && ! empty( $this->config[ $key ] ) ) {
			return $this->config[ $key ];
		}

		return $default;
	}
}

