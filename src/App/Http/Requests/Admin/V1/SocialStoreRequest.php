<?php

namespace Callmeaf\Social\App\Http\Requests\Admin\V1;

use Callmeaf\Social\App\Enums\SocialStatus;
use Callmeaf\Social\App\Enums\SocialType;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class SocialStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(SocialRepoInterface $socialRepo): array
    {
        return [
            'status' => ['required',new Enum(SocialStatus::class)],
            'type' => ['required',new Enum(SocialType::class)],
            'chat_id' => ['required','string',Rule::unique($socialRepo->getTable(),'chat_id')->where('type',$this->get('type'))]
        ];
    }
}
