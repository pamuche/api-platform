<?php

namespace App\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class CheeseListingInputDenormalizer implements DenormalizerInterface, CacheableSupportsMethodInterface
{
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
    }

    public function supportsDenormalization($data, string $type, string $format = null)
    {
    }

    public function hasCacheableSupportsMethod(): bool
    {
    }
}
