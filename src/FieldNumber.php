<?php

namespace Adaptcms\FieldNumber;

use Adaptcms\Base\Models\Package;

class FieldNumber
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
