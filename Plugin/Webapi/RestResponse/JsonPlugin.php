<?php

namespace Rfmcube\Customapi\Plugin\Webapi\RestResponse;

use Magento\Framework\Webapi\Rest\Request;
use Magento\Framework\Webapi\Rest\Response\Renderer\Json;
use Psr\Log\LoggerInterface;

class JsonPlugin {

    /** @var Request */
    private $request;

    /** @var LoggerInterface */
    private $logger;

    /**
     * JsonPlugin constructor.
     * @param Request $request
     */
    public function __construct(
            Request $request,
            LoggerInterface $logger
    ) {
        $this->request = $request;
        $this->logger = $logger;
    }

    /**
     * @param Json $jsonRenderer
     * @param callable $proceed
     * @param $data
     * @return mixed
     */
    public function aroundRender(Json $jsonRenderer, callable $proceed, $data) {
        if (
                strpos($this->request->getPathInfo(), "/V1/detailedcustomers") === 0 ||
                strpos($this->request->getPathInfo(), "/V1/detailedorders") === 0
        ) {
            $this->logger->info("getPathInfo " . $this->request->getPathInfo());

            if ($this->isJson($data)) {
                return $data;
            }
        }
        return $proceed($data);
    }

    /**
     * @param $data
     * @return bool
     */
    private function isJson($data) {
        if (!is_string($data)) {
            return false;
        }
        json_decode($data);
        return (json_last_error() == JSON_ERROR_NONE);
    }

}
