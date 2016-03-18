<?php

class WP_Forms_API_Test extends WP_UnitTestCase {
	function test_render() {
		$values = [];
		$html = WP_Forms_API::render_form( [
			'text-input' => [ '#type' => 'text' ]
		], $values );


		$this->assertContains( 'type="text"', $html );
		$this->assertContains( 'name="text-input"', $html );
	}
}
