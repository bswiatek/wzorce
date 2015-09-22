<?php

/**
 * Created by bswiatek on 22.09.15.
 */
interface Observer
{
    function update(Subject $subject);
}