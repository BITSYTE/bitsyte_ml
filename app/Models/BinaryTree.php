<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * BinaryTree
 *
 * @property int $id
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property int $side
 * @property string $status
 * @property int $volume_lft
 * @property int $volume_rgt
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\BinaryTree[] $children
 * @property-read \App\Models\BinaryTree|null $parent
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree d()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereVolumeLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BinaryTree whereVolumeRgt($value)
 * @mixin \Eloquent
 */
class BinaryTree extends Model {

    use NodeTrait;

   /**
   * Table name.
   *
   * @var string
   */
    protected $table = 'binary_trees';

    /** @var array  */
    protected $fillable = [
        'status', 'volume_lft', 'volume_rgt', 'side', 'product_id',
    ];

    /**
     * Get related user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

  //////////////////////////////////////////////////////////////////////////////

  //
  // Below come the default values for Baum's own Nested Set implementation
  // column names.
  //
  // You may uncomment and modify the following fields at your own will, provided
  // they match *exactly* those provided in the migration.
  //
  // If you don't plan on modifying any of these you can safely remove them.
  //

  // /**
  //  * Column name which stores reference to parent's node.
  //  *
  //  * @var string
  //  */
  // protected $parentColumn = 'parent_id';

  // /**
  //  * Column name for the left index.
  //  *
  //  * @var string
  //  */
  // protected $leftColumn = 'lft';

  // /**
  //  * Column name for the right index.
  //  *
  //  * @var string
  //  */
  // protected $rightColumn = 'rgt';

  // /**
  //  * Column name for the depth field.
  //  *
  //  * @var string
  //  */
  // protected $depthColumn = 'depth';

  // /**
  //  * Column to perform the default sorting
  //  *
  //  * @var string
  //  */
  // protected $orderColumn = null;

  // /**
  // * With Baum, all NestedSet-related fields are guarded from mass-assignment
  // * by default.
  // *
  // * @var array
  // */
  // protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');

  //
  // This is to support "scoping" which may allow to have multiple nested
  // set trees in the same database table.
  //
  // You should provide here the column names which should restrict Nested
  // Set queries. f.ex: company_id, etc.
  //

  // /**
  //  * Columns which restrict what we consider our Nested Set list
  //  *
  //  * @var array
  //  */
  // protected $scoped = array();

  //////////////////////////////////////////////////////////////////////////////

  //
  // Baum makes available two model events to application developers:
  //
  // 1. `moving`: fired *before* the a node movement operation is performed.
  //
  // 2. `moved`: fired *after* a node movement operation has been performed.
  //
  // In the same way as Eloquent's model events, returning false from the
  // `moving` event handler will halt the operation.
  //
  // Please refer the Laravel documentation for further instructions on how
  // to hook your own callbacks/observers into this events:
  // http://laravel.com/docs/5.0/eloquent#model-events

}
