<?php

namespace GetRight\Projects\Components;

use Cms\Classes\ComponentBase;
use GetRight\Projects\Models\Project;

/**
 * Class RecentProjects
 * @package GetRight\Projects\Components
 * @author getRight
 */
class RecentProjects extends ComponentBase
{
    /**
     * @var $projects
     */
    public $projects;

    /**
     * Define component details.
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'RecentProjects Component',
            'description' => 'Show latest projects.'
        ];
    }

    /**
     * Define component properties.
     *
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * Runs when component is loaded.
     */
    public function onRun() {
        $this->projects = $this->getRecentProjects();
    }

    /**
     * Get the most recent projects
     */
    private function getRecentProjects()
    {
        return Project::take(2)->get();
    }
}
