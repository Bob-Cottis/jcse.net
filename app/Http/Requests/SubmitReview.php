<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitReview extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //  handle authorization elsewhere
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
            $ret[$key . 'Rating'] = 'required|integer|min:0|max:7';
            $ret[$key . 'Comment'] = 'nullable|string|required_if:' . $key . 'Rating,1,2,3,4';
        }
        //dd($ret);
        return $ret;
    }

    public function messages() {
        return ['required_if' => 'Please include a comment when the rating is less then 5',
            'max'=>'Please select a rating number'];
    }

    public function attributes()
    {
        $sections = config('jrnl.reviewQuestions');
        foreach($sections as $key => $value) {
            $ret[$key.'Rating'] = ucfirst($key).' Rating';
            $ret[$key.'Comment'] = ucfirst($key).' Comments';
        }
        return $ret;
    }
}
