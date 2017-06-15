<?php

namespace GetRight\Projects\Components;

use Cms\Classes\ComponentBase;

/**
 * Class ProjectDetails
 * @package GetRight\Projects\Components
 * @author getRight
 */
class ProjectDetails extends ComponentBase
{
    /**
     * Define component details.
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'ProjectDetails Component',
            'description' => 'Show one project.'
        ];
    }

    /**
     * Define the properties for this component.
     *
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }
}
