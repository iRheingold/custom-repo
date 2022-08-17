<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellidop'=>$this->faker->lastName(),
            'apellidom'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'foto'=>'uploads/'.$this->faker->image(storage_path('app/public/uploads'),150,150,null,false,true)
        ];
    }
}
