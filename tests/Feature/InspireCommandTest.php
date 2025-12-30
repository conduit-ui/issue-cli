<?php

declare(strict_types=1);

describe('InspireCommand', function () {
    it('displays an inspiring quote', function () {
        $this->artisan('inspire')
            ->assertExitCode(0);
    });

    it('accepts a name argument', function () {
        $this->artisan('inspire', ['name' => 'Seattle'])
            ->assertExitCode(0);
    });
});
