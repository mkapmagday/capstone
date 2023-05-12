<?php

namespace Database\Factories;

use App\Models\DocumentList;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentListFactory extends Factory
{
    protected $model = DocumentList::class;

    public function definition()
    {
        return [
            'document_name' => $this->faker->unique()->word()
        ];
    }
}
