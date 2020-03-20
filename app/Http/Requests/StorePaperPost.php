<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaperPost extends FormRequest
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
        return [
            'leadAuthor' => 'integer',
            'title' => 'string:required|max:255',
            'abstract' => 'string|required|max:4095',
            'keywords' => 'required|max:4095',
            'auth_id' => 'present',
            'authemail.*' => 'required|email',
            'authtitle.*' => 'integer|min:1|max:100|required_if:auth_id,',
            'authgivenName.*' => 'string|nullable|max:255|required_if:auth_id,',
            'authfamilyName.*' => 'string|nullable|max:255|required_if:auth_id,',
            'authorganization.*' => 'string|nullable|max:255|required_if:auth_id,',
            'authcountry_id.*' => 'integer|max:255|required_if:auth_id,'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A paper title is required',
            'title.max' => 'The paper title can be no more than 255 characters',
            'abstract.required' => 'Aa abstract is required',
            'abstract.max' => 'The abstract must be no more than 4095 characters',
            'keywords.required' => 'Keywords are required',
            'keywords.max' => 'The keywords must be no more than 4095 characters',
            'email.*.required' => 'An email address is required',
            'email.*.email' => 'Not a valid email address',
            'title_id.*.required_if' => 'A title is required if the author is not registered',
            'title_id.*.min' => 'Please select a title (which can be blank)',
            'givenName.*.required_if' => 'A given name is required if the author is not registered',
            'familyName.*.required_if' => 'A family name is required if the author is not registered',
            'organization.*.required_if' => 'An organization is required if the author is not registered'
        ];

    }
}
