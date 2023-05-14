<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\JobRequest;
use App\Models\Job;
use Dotlogics\Admin\App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class JobController extends CrudController
{
    // protected $page_title = 'Job';
    // protected $menu_active = 'jobs';
    // protected $view_base = 'admin.jobs';
    protected $route_base = 'laravel-admin.jobs';
    protected $entery = 'Job';
    protected $model = Job::class;
    protected $request = JobRequest::class;
    protected $table_columns = [
        ['data' => 'url', 'name' => 'url'],
        ['data' => 'remote_job', 'name' => 'remote_job'],
        ['data' => 'full_time', 'name' => 'full_time'],
        ['data' => 'like_to_relocate', 'name' => 'like_to_relocate'],
        ['data' => 'created_at', 'name' => 'created_at'],
        ['data' => 'actions', 'name' => 'actions', 'width' => '25%'],
    ];

    public function form_fields($item = null){
        return [];
    }

    public function editActionsColumn($item)
	{
        $view = '<a href="'. route("{$this->route_base}.show", $item->id) .'" class="edit btn btn-primary btn-sm mt-1">&nbsp; View &nbsp;</a>';

        return $this->extraActions([$view], $item);
    }

    /**
	 * Display the specified resource.
	 *
	 * @param  string|int  $item
	 * @return \Illuminate\Http\Response
	 */
	public function show($item)
	{
		$item = $this->resolveItem($item);
        // echo "<pre>";
        // print_r($item); die;
        $item->role = $item->getRole->name;
        $item->years = $item->year->name;
        $item->primary_skill = $item->getPrimarySkill->name;
        $item->years_of_experience = $item->getYearsOfExperience->name;
        $item->english_proficiency = $item->getEnglishProficiency->name;
        $item->country_of_residence = $item->CountryOfResidence->nicename;
        $item->country_of_citizenship = $item->CountryOfCitizenship->nicename;

        unset($item->getRole, $item->year, $item->getPrimarySkill, $item->getYearsOfExperience, $item->getEnglishProficiency, $item->CountryOfResidence, $item->CountryOfCitizenship);

		return view("{$this->view_base}.details", $this->view_data(['item' => $item, 'type' => 'details']));
	}
}
