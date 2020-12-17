<?php
namespace DEG\CustomReports\Controller\Adminhtml\CustomReport;

class NewAction extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'DEG_CustomReports::customreports_add_new';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * NewAction constructor.
     *
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        //Call page factory to render layout and page content
        $resultPage = $this->resultPageFactory->create();
        //Set the menu which will be active for this page
        $resultPage->setActiveMenu('DEG_CustomReports::customreports');

        //Set the header title of grid
        $resultPage->getConfig()->getTitle()->prepend(__('New Report'));
        return $resultPage;
    }
}
