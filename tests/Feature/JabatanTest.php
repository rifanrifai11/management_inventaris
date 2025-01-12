<?php

namespace Tests\Feature;

use App\Models\Jabatan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JabatanTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_creates_a_jabatan(): void
    {
        $data = [
            'name' => "Sekertaris",
            'deskripsi' => "Jabatan dibagian sekertaris",
        ];

        $task = Jabatan::create([
            'name' => "Sekertaris",
            'deskripsi' => "Jabatan dibagian sekertaris",
        ]);

        $this->assertInstanceOf(Jabatan::class, $task);
        $this->assertEquals($data['name'], $task->name);
        $this->assertEquals($data['deskripsi'], $task->deskripsi);
    }
}
