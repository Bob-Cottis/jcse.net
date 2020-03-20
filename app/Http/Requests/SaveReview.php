<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveReview extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $sections = config('jrnl.reviewQuestions');
        $ret = ['reviewer' => 'required|integer',
            'paper_id' => 'required|integer',
            'confirmCode' => 'required|string|size:30',
            'editorComments' => 'nullable|string',
            'authorComments' => 'nullable|string'];

        foreach ($sections as $key => $value) {
            $ret[$key . 'Rating'] = 'nullable|integer';
            $ret[$key . 'Comment'] = 'nullable|string';
        }
        //dd($ret);
        return $ret;
            //
    }
}
