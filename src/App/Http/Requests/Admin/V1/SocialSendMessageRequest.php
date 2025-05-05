<?php

namespace Callmeaf\Social\App\Http\Requests\Admin\V1;

use Callmeaf\SocialBot\App\Enums\SocialBotStatus;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialSendMessageRequest extends FormRequest
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
    public function rules(SocialBotRepoInterface $socialBotRepo): array
    {
        return [
            'message' => ['required','string'],
            'social_bot_id' => ['required',Rule::exists($socialBotRepo->getTable(),$socialBotRepo->getModel()->getKeyName())->where('status',SocialBotStatus::ACTIVE->value)],
        ];
    }
}
