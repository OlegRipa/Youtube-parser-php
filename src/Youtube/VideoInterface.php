<?php

namespace Youtube;

interface VideoInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param $id
     * @return $this
     */
    public function setId($id);
} 