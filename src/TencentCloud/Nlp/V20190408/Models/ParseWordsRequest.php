<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParseWords请求参数结构体
 *
 * @method string getText() 获取待分析的文本（支持中英文文本，不超过500字符）
 * @method void setText(string $Text) 设置待分析的文本（支持中英文文本，不超过500字符）
 */
class ParseWordsRequest extends AbstractModel
{
    /**
     * @var string 待分析的文本（支持中英文文本，不超过500字符）
     */
    public $Text;

    /**
     * @param string $Text 待分析的文本（支持中英文文本，不超过500字符）
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
