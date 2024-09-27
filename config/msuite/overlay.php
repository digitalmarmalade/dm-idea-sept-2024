<?php

return [
    
    'default_container_template' => 'vendor.digitalmarmalade.MarmaladeSuite.Overlay.container',
    
    'default_wrapper_classes' => [
        'nonmodal' => 'overlay-nonmodal-container',
        'modal' => 'overlay-modal-container'
    ],
    
    'view' => [
        'name_to_id_view_variable' => 'overlayNameToIdRemap'
    ]
    
];
