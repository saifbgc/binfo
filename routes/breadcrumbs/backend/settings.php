<?php

Breadcrumbs::for('admin.settings.dashboard', function ($trail) {
    $trail->push(__('strings.backend.settings.main'), route('admin.settings.dashboard'));
});