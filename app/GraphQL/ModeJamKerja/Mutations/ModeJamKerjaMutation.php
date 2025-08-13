<?php

namespace App\GraphQL\ModeJamKerja\Mutations;
use App\Models\ModeJamKerja\ModeJamKerja;

class ModeJamKerjaMutation {
    public function restore($_, array $args): ?ModeJamKerja {
        return ModeJamKerja::withTrashed()->find($args['id'])?->restore()
        ? ModeJamKerja::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?ModeJamKerja{
        $ModeJamKerja = ModeJamKerja::withTrashed()->find($args['id']);
        if ($ModeJamKerja) {
            $ModeJamKerja->forceDelete();
            return $ModeJamKerja;
        }
        return null;
    }
}

?>