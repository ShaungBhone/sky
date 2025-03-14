<?php

namespace LaraZeus\Sky\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $label
 * @property string $class
 * @property string $icon
 */
class PostStatus extends Model
{
    use \Sushi\Sushi;

    public function getRows()
    {
        return [
            ['name' => 'publish', 'label' => __('Publish'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-success-700 bg-success-500/10', 'icon' => 'iconpark-filesuccessone'],
            ['name' => 'future', 'label' => __('Future'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-warning-700 bg-warning-500/10', 'icon' => 'iconpark-filedateone'],
            ['name' => 'draft', 'label' => __('Draft'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-secondary-700 bg-secondary-500/10', 'icon' => 'iconpark-filehidingone'],
            ['name' => 'auto-draft', 'label' => __('Auto draft'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-primary-700 bg-primary-500/10', 'icon' => 'iconpark-filesearchone'],
            ['name' => 'pending', 'label' => __('Pending'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-info-700 bg-info-500/10', 'icon' => 'iconpark-fileeditingone'],
            ['name' => 'private', 'label' => __('Private'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-danger-700 bg-danger-500/10', 'icon' => 'iconpark-filelockone'],
            ['name' => 'trash', 'label' => __('Trash'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-danger-700 bg-danger-500/10', 'icon' => 'iconpark-filetextone'],
            ['name' => 'inherit', 'label' => __('Inherit'), 'class' => 'px-2 py-0.5 text-xs rounded-xl text-primary-700 bg-primary-500/10', 'icon' => 'iconpark-filetipsone'],
        ];
    }

    protected function sushiShouldCache()
    {
        return true;
    }
}
