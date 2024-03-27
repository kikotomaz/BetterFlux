<?php

declare(strict_types=1);

class BetterFluxExtension extends Minz_Extension
{
	public function init(): void {
		Minz_View::appendScript($this->getFileUrl('bflux.js', 'js'));
		Minz_View::appendStyle($this->getFileUrl('bflux.css', 'css'));
	}
}
