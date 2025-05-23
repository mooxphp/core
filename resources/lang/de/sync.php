<?php

return [
    // Sync refers to the package name Moox Sync, and data transfer between platforms
    'sync' => 'Sync',
    // Syncs refers to the package name Moox Sync, and data transfer between platforms
    'syncs' => 'Syncs',
    // Platform refers to the platform that data is being transferred from or to
    'platform' => 'Platform',
    // Platforms refers to the platforms that data is being transferred from or to
    'platforms' => 'Plattformen',
    // Source Platform refers to the platform that the data is being transferred from
    'source_platform' => 'Source Platform',
    // Target Platform refers to the platform that the data is being transferred to
    'target_platform' => 'Zielplattform',
    // Target Platforms refers to the platform that the data is being transferred to
    'target_platforms' => 'Zielplattformen',
    // Source Platform refers to the platform that data is being transferred from
    'source_platform_id' => 'Source Platform ID',
    // Target Platform refers to the platform that data is being transferred to
    'target_platform_id' => 'Target Platform ID',
    // Sync error refers to any error that occurs in the package Moox Sync
    'sync_error' => 'Sync Error',
    // Sync error: if someone tries to make multiple platforms the master platform
    'sync_error_master' => 'There can only be one master platform.',
    // Sync error: if someone tries to make the same platform and model the source and target
    'sync_error_platforms' => 'Source and Target Platform cannot be the same with the same model.',
    // The source model refers to the model that data is being transferred from
    'source_model' => 'Source Model',
    // The target model refers to the model that data is being transferred to
    'target_model' => 'Zielmodell',
    // Use relations from the model to platform
    'use_platform_relations' => 'Use Platform Relations',
    // If exists refers to the action to take if the record already exists
    'if_exists' => 'Falls vorhanden',
    // Filter ids refers to the ids to filter when syncing
    'filter_ids' => 'IDs filtern',
    // Ignore ids refers to the ids to ignore when syncing
    'ignore_ids' => 'IDs ignorieren',
    // Sync all records refers to syncing all records
    'sync_all_records' => 'Sync all Records',
    // Sync only ids refers to syncing only the ids
    'sync_only_ids' => 'Nur IDs synchronisieren',
    // Sync all fields refers to syncing all fields
    'sync_all_fields' => 'Sync all Fields',
    // Sync only fields defined in the field mappings
    'field_mappings' => 'Field Mappings',
    // Use a transformer class to transform the data when syncing
    'use_transformer_class' => 'Use Transformer Class',
    // When was the last time the data was synced
    'last_sync' => 'Letzte Synchronisierung',
    // Source Platform and Model refers to the source of the data being transferred
    'source_platform_and_model' => 'Quellplattform und -modell',
    // Target Platform and Model refers to the target of the data being transferred
    'target_platform_and_model' => 'Zielplattform und -modell',
    // Syncable ID refers to the ID of the record being synced
    'syncable_id' => 'Syncable ID',
    // Syncable Type refers to the type of record being synced
    'syncable_type' => 'Syncable Type',
    // API Token refers to the token used to authenticate the API
    'api_token' => 'Api Token',
    // Generate Token refers to the action to generate a new token
    'generate_token' => 'Token generieren',
    // Locked means the platform or model is locked and cannot be synced
    'locked' => 'Gesperrt',
    // Lock Reason refers to the reason the platform or model is locked
    'lock_reason' => 'Grund der Sperre',
    'missing_columns' => 'Fehlende Spalten',
    'extra_columns' => 'Zusätzliche Spalten',
    'model_compatibility_warning' => 'Model Kompatibilitätswarnung',
    'models_are_not_fully_compatible' => 'Die gewählten Models sind nicht voll kompatibel',
    'please_map_fields_manually' => 'Bitte die Felder manuell zuordnen',
];
