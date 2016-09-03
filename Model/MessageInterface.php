<?php

namespace FOS\MessageBundle\Model;

/**
 * Message model
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface MessageInterface extends ReadableInterface
{
    /**
     * Gets the message unique id
     *
     * @return mixed
     */
    public function getId();

    /**
     * @return ThreadInterface
     */
    public function getThread();

    /**
     * @param  ThreadInterface
     * @return null
     */
    public function setThread(ThreadInterface $thread);

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param  string
     * @return null
     */
    public function setBody($body);

    /**
     * @return ParticipantInterface
     */
    public function getSender();

    /**
     * @param  ParticipantInterface
     * @return null
     */
    public function setSender(ParticipantInterface $sender);
}
