<?php

namespace App\GraphQL\Aktivitas\Mutations;
use App\Models\Aktivitas\Aktivitas;

class AktivitasMutation {
    public function restore($_, array $args): ?Aktivitas {
        return Aktivitas::withTrashed()->find($args['id'])?->restore()
        ? Aktivitas::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?Aktivitas{
        $Aktivitas = Aktivitas::withTrashed()->find($args['id']);
        if ($Aktivitas) {
            $Aktivitas->forceDelete();
            return $Aktivitas;
        }
        return null;
    }
}

?>