<?php

test('homepage is visible', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
