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
 * AnalyzeSentiment返回参数结构体
 *
 * @method float getPositive() 获取正面情感概率。
 * @method void setPositive(float $Positive) 设置正面情感概率。
 * @method float getNeutral() 获取中性情感概率。
 * @method void setNeutral(float $Neutral) 设置中性情感概率。
 * @method float getNegative() 获取负面情感概率。
 * @method void setNegative(float $Negative) 设置负面情感概率。
 * @method string getSentiment() 获取情感分类结果：
positive：正面情感
negative：负面情感
neutral：中性、无情感
 * @method void setSentiment(string $Sentiment) 设置情感分类结果：
positive：正面情感
negative：负面情感
neutral：中性、无情感
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AnalyzeSentimentResponse extends AbstractModel
{
    /**
     * @var float 正面情感概率。
     */
    public $Positive;

    /**
     * @var float 中性情感概率。
     */
    public $Neutral;

    /**
     * @var float 负面情感概率。
     */
    public $Negative;

    /**
     * @var string 情感分类结果：
positive：正面情感
negative：负面情感
neutral：中性、无情感
     */
    public $Sentiment;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Positive 正面情感概率。
     * @param float $Neutral 中性情感概率。
     * @param float $Negative 负面情感概率。
     * @param string $Sentiment 情感分类结果：
positive：正面情感
negative：负面情感
neutral：中性、无情感
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }

        if (array_key_exists("Neutral",$param) and $param["Neutral"] !== null) {
            $this->Neutral = $param["Neutral"];
        }

        if (array_key_exists("Negative",$param) and $param["Negative"] !== null) {
            $this->Negative = $param["Negative"];
        }

        if (array_key_exists("Sentiment",$param) and $param["Sentiment"] !== null) {
            $this->Sentiment = $param["Sentiment"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
