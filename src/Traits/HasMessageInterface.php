<?php

namespace DraperStudio\Messageable\Traits;

/**
 * Interface HasMessageInterface.
 */
interface HasMessageInterface
{
    /**
     * @return mixed
     */
    public function messages();

    /**
     * @return mixed
     */
    public function threads();

    /**
     * @return mixed
     */
    public function newMessagesCount();

    /**
     * @return mixed
     */
    public function threadsWithNewMessages();
}
