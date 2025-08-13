<?php

namespace App\GraphQL\Pesan\Mutations;
use App\Models\Pesan\Pesan;

class PesanMutation {
    public function restore($_, array $args): ?Pesan {
        return Pesan::withTrashed()->find($args['id'])?->restore()
        ? Pesan::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?Pesan{
        $Pesan = Pesan::withTrashed()->find($args['id']);
        if ($Pesan) {
            $Pesan->forceDelete();
            return $Pesan;
        }
        return null;
    }
}

?>