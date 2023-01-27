<?php
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Stats
{
    /**
     * Get [channel statistics](https://core.telegram.org/api/stats)
     *
     * @param array $channel The channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $dark Whether to enable dark theme for graph colors @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * 
     *
     * @return array
     */
    public function getBroadcastStats(array $channel, array $dark = []);

    /**
     * Load [channel statistics graph](https://core.telegram.org/api/stats) asynchronously
     *
     * @param string $token Graph token from [statsGraphAsync](https://docs.madelineproto.xyz/API_docs/constructors/statsGraphAsync.html) constructor
     * @param int $x Zoom value, if required
     * 
     *
     * @return array
     */
    public function loadAsyncGraph(string $token, int $x = 0);

    /**
     * Get [supergroup statistics](https://core.telegram.org/api/stats)
     *
     * @param array $channel [Supergroup ID](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $dark Whether to enable dark theme for graph colors @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * 
     *
     * @return array
     */
    public function getMegagroupStats(array $channel, array $dark = []);

    /**
     * Obtains a list of messages, indicating to which other public channels was a channel message forwarded.  
     * Will return a list of [messages](https://docs.madelineproto.xyz/API_docs/constructors/message.html) with `peer_id` equal to the public channel to which this message was forwarded.
     *
     * @param array $channel Source channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $msg_id Source message ID
     * @param int $offset_rate Initially 0, then set to the `next_rate` parameter of [messages.messagesSlice](https://docs.madelineproto.xyz/API_docs/constructors/messages.messagesSlice.html)
     * @param array $offset_peer [Offsets for pagination, for more info click here](https://core.telegram.org/api/offsets) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $offset_id [Offsets for pagination, for more info click here](https://core.telegram.org/api/offsets)
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * 
     *
     * @return array
     */
    public function getMessagePublicForwards(array $channel, int $msg_id, int $offset_rate, array $offset_peer, int $offset_id, int $limit);

    /**
     * Get [message statistics](https://core.telegram.org/api/stats)
     *
     * @param array $channel Channel ID @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $msg_id Message ID
     * @param array $dark Whether to enable dark theme for graph colors @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * 
     *
     * @return array
     */
    public function getMessageStats(array $channel, int $msg_id, array $dark = []);
}
