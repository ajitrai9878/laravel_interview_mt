<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static first()
 * @method static create($data)
 * @method static where(array $array)
 */
class Cms extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'header_logo',
        'header_home_button_name',
        'header_contact_us_button_name',
        'banner_text_1',
        'banner_text_2',
        'banner_text_3',
        'banner_contact_us_button_name',
        'welcome_section_text_1',
        'welcome_section_text_2',
        'welcome_sub_section_title_1',
        'welcome_sub_section_description_1',
        'welcome_sub_section_title_2',
        'welcome_sub_section_description_2',
        'welcome_sub_section_title_3',
        'welcome_sub_section_description_3',
        'banner_section_2_text_1',
        'banner_section_2_text_2',
        'banner_section_2_text_3',
        'banner_section_2_contact_us_button_name',
        'what_you_get_area_text',
        'what_you_get_area_sub_section_title_1',
        'what_you_get_area_sub_section_description_1',
        'what_you_get_area_sub_section_title_2',
        'what_you_get_area_sub_section_description_2',
        'what_you_get_area_sub_section_title_3',
        'what_you_get_area_sub_section_description_3',
        'how_it_works_area_text',
        'how_it_works_area_sub_section_title_1',
        'how_it_works_area_sub_section_description_1',
        'how_it_works_area_sub_section_title_2',
        'how_it_works_area_sub_section_description_2',
        'how_it_works_area_sub_section_title_3',
        'how_it_works_area_sub_section_description_3',
        'join_our_network_area_text',
        'join_our_network_area_sub_section_title_1',
        'join_our_network_area_sub_section_description_1',
        'join_our_network_area_sub_section_title_2',
        'join_our_network_area_sub_section_description_2',
        'last_section_text_1',
        'last_section_text_2',
        'last_section_text_3',
        'last_section_contact_us_button_name',
        'footer_logo',
        'footer_section_home_text',
        'footer_section_contact_us_text',
        'last_section_rights_text',
        'twitter',
        'facebook',
        'google',
    ];

    public function saveData($request)
    {
        $data = $request->all();
        unset($data['_token']);
        $cms = self::first();
        $header = @$cms->header_logo;
        $footer = @$cms->footer_logo;
        if ($request->file('header_logo')) {
            $file = $request->file('header_logo');
            $destinationPath = 'public/uploads/logos/';
            $fileName = mt_rand(11111111, 99999999) . "_" . time() . "_" . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
            $header = $fileName;
        }
        if ($request->file('footer_logo')) {
            $file = $request->file('footer_logo');
            $destinationPath = 'public/uploads/logos/';
            $fileName = mt_rand(11111111, 99999999) . "_" . time() . "_" . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
            $footer = $fileName;
        }
        $data['header_logo'] = $header;
        $data['footer_logo'] = $footer;
        if ($cms) {
            return self::where(['id' => $cms->id])->update($data);
        } else {
            return self::create($data);
        }
    }
}
