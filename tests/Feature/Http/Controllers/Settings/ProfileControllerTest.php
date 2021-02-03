<?php

namespace Tests\Feature\Http\Controllers\Settings;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Tests\ControllerTestCase;

class ProfileControllerTest extends ControllerTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs($this->user);
    }

    public function testIndex(): void
    {
        $this->actingAs($this->user);

        $response = $this->get(route('settings.profile.index', $this->user));

        $response->assertOk();
    }

    public function testUpdate(): void
    {
        $name = $this->faker->name;
        $github_name = $this->faker->userName;
        $hexletNickname = $this->faker->userName;
        $response = $this->patch(route('settings.profile.update', $this->user), [
            'name' => $name,
            'github_name' => $github_name,
            'hexlet_nickname' => $hexletNickname,
        ]);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', [
            'id' => $this->user->id,
            'name' => $name,
            'github_name' => $github_name,
            'hexlet_nickname' => $hexletNickname,
        ]);
    }

    public function testUpdateSameName(): void
    {
        $response = $this->patch(route('settings.profile.update', $this->user), [
            'name' => $this->user->name,
        ]);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', ['id' => $this->user->id, 'name' => $this->user->name]);
    }

    public function invalidNamesProvider(): array
    {
        return [
            ['-'],
            [Str::random(256)],
        ];
    }

    /**
     * @dataProvider invalidNamesProvider
     */
    public function testUpdateInvalidName(string $invalidName): void
    {
        $this->expectException(ValidationException::class);

        $this->patch(route('settings.profile.update', $this->user), [
                'name' => $invalidName,
            ])
            ->assertRedirect()
            ->assertSessionHasErrors('name');
    }
}
