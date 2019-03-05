<?php

namespace FilippoToso\Travelport\GDSQueue;

class ModificationType
{
    const __default = 'AddSegment';
    const AddSegment = 'AddSegment';
    const RemoveSegment = 'RemoveSegment';
    const ReplaceSegment = 'ReplaceSegment';
    const AddPassenger = 'AddPassenger';
    const RemovePassenger = 'RemovePassenger';
    const OptionsOnly = 'OptionsOnly';
    const Other = 'Other';


}
