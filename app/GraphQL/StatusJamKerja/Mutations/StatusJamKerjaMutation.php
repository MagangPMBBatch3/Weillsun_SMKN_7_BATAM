<?php

namespace App\GraphQL\StatusJamKerja\Mutations;
use App\Models\StatusJamKerja\StatusJamKerja;

class StatusJamKerjaMutation {
    public function restore($_, array $args): ?StatusJamKerja {
        return StatusJamKerja::withTrashed()->find($args['id'])?->restore()
        ? StatusJamKerja::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?StatusJamKerja{
        $StatusJamKerja = StatusJamKerja::withTrashed()->find($args['id']);
        if ($StatusJamKerja) {
            $StatusJamKerja->forceDelete();
            return $StatusJamKerja;
        }
        return null;
    }
}

?>