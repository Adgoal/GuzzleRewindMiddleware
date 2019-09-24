Example usage


```yaml

services:
  GuzzleHttp\Client:
    arguments:
      - handler: '@guzzle.handler-stack'

  guzzle.handler-stack:
    class: GuzzleHttp\HandlerStack
    factory: [ GuzzleHttp\HandlerStack, 'create' ]
    calls:
      - [ 'push', [ '@guzzle.rewind.middleware', 'rewind'] ]

  guzzle.rewind.middleware:
    class: Adgoal\GuzzleRewindMiddleware\GuzzleRewindMiddleware
    factory: [ Adgoal\GuzzleRewindMiddleware\GuzzleRewindMiddleware, rewind ]


```