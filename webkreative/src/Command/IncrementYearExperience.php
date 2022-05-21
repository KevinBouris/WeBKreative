<?php
namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name:'app:user:increment-experience',
    description:'increment user year experience',
    hidden:false,
    aliases:['app:incrementyear']
)]
class IncrementYearExperience extends Command
{
    private $userRepository;

    protected static $incrementYearExperience = 'app:user:increment-experience';

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Increment user year experiences');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $this->userRepository->incrementYearExperience();

        $io->success(sprintf('The years of experience of the users have been incremented'));

        return Command::SUCCESS;
    }
}
