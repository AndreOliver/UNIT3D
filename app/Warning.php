<?php
/**
 * NOTICE OF LICENSE
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 * @author     Mr.G
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    /**
     * Belongs To A Torrent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function torrenttitle()
    {
        return $this->belongsTo(Torrent::class, 'torrent');
    }

    /**
     * Belongs To A User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function warneduser()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault([
            'username' => 'System',
            'id' => '1'
        ]);
    }

    /**
     * Belongs To A USer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staffuser()
    {
        return $this->belongsTo(User::class, 'warned_by')->withDefault([
            'username' => 'System',
            'id' => '1'
        ]);
    }
}
