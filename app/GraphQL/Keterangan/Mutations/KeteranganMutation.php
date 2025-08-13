<?php

namespace App\GraphQL\Keterangan\Mutations;
use App\Models\Keterangan\Keterangan;

class KeteranganMutation {
    public function restore($_, array $args): ?Keterangan {
        return Keterangan::withTrashed()->find($args['id'])?->restore()
        ? Keterangan::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?Keterangan{
        $Keterangan = Keterangan::withTrashed()->find($args['id']);
        if ($Keterangan) {
            $Keterangan->forceDelete();
            return $Keterangan;
        }
        return null;
    }
}

?>