<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $step = $this->step;
        if(!in_array($step, [1, 2, 3, 4, 5, 6])){
            return false;
        }

        $method = "step{$step}";

        return $this->$method();
    }

    public function step1()
    {
        return [
            'url' => 'required|url',
            'role' => 'required',
            'years' => 'required',
            'primary_skill' => 'required',
            'years_of_experience' => 'required',
            'english_proficiency' => 'required'
        ];
    }
    
    public function step2()
    {
        return [
            // 
        ];
    }

    public function step3()
    {
        return [
            // 
        ];
    }

    public function step4()
    {
        return [
            // 
        ];
    }

    public function step5()
    {
        return [
            // 
        ];
    }

    public function step6()
    {
        return [
            // 
        ];
    }

}
