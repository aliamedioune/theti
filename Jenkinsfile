pipeline {
    agent any
    
    stages {
        stage('Get Repo') {
            steps {
                deleteDir() // Clears workspace
                git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
            }
        }
        
        stage('Old build down') {
            steps {
                sh 'sudo chmod 777 /var/run/docker.sock'
                sh 'sudo chmod 777 -R /home/ubuntu/theti'
                sh 'docker-compose -f /home/ubuntu/theti/docker-compose.yml down'
            }
        }

        stage('Build UP') {
            steps {
                sh 'docker build -t theti /home/ubuntu/theti'
                sh 'docker-compose -f /home/ubuntu/theti/docker-compose.yml up --build -d'
            }
        }
        
        stage('Test') {
            steps {
                sh 'cd /home/ubuntu/theti/ && phpunit --log-junit result.xml UnitTestFiles/Test/FirstTest.php'
            }
        }
    }
    
    triggers {
        // Define trigger for SCM changes
        githubPush()
    }
}









